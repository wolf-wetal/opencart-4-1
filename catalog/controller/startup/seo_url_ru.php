<?php
namespace Opencart\Catalog\Controller\Startup;
/**
 * Class SeoUrlRu
 *
 * @package Opencart\Catalog\Controller\Startup
 */
class SeoUrlRu extends \Opencart\System\Engine\Controller {
	/**
	 * @var array<string, string>
	 */
	private array $data = [];
	private $short_routes = false;

	/**
	 * Index
	 *
	 * @return null
	 */
	public function index() {
		
		// Add rewrite to URL class
		if ($this->config->get('config_seo_url')) {
			
			if ($this->config->get('config_seo_short_url')) {
				$this->short_routes = true;	
			}

			$this->url->addRewrite($this);

			$this->load->model('design/seo_url');

			// Decode URL
			if (isset($this->request->get['_route_'])) {
				$parts = explode('/', $this->request->get['_route_']);

				// remove any empty arrays from trailing
				if (oc_strlen(end($parts)) == 0) {
					array_pop($parts);
				}
				
				$seok = [];

				foreach ($parts as $key => $value) {
					$seo_url_info = $this->model_design_seo_url->getSeoUrlByKeyword($value);

					if ($seo_url_info) {

						$this->request->get[$seo_url_info['key']] = html_entity_decode($seo_url_info['value'], ENT_QUOTES, 'UTF-8');
						
						unset($parts[$key]);


						if ($this->short_routes) {
							$routes = [
								'path'            => 'product/category',
								'product_id'      => 'product/product',
								'manufacturer_id' => 'product/manufacturer.info',
								'information_id'  => 'information/information',
							];
							
							// Если нет роута, то пробуем его найти
							foreach ($routes as $keyr => $route) {
								if ($seo_url_info['key'] == $keyr) {
									$this->request->get['route'] = $route;
									$key_route = true;
									break;
								}
							}
						}

						$seok[] = $seo_url_info['key'];

					} else {
						$this->request->get['route'] = $this->config->get('action_error');
					}
				}

				// нужно чтобы работал срез, если несколько языков
				$lango = (count($seok) === 1 && $seok[0] === 'language') ? true : false;

				// защита от среза чпу роута
				if (!isset($this->request->get['route']) && !$lango) {
					$this->request->get['route'] = $this->config->get('action_error');
				}


				if ($parts) {
					$this->request->get['route'] = $this->config->get('action_error');
				}
			}
			
		} else { 
			// если выключен чпу, то страница не найдена. 
			if (isset($this->request->get['_route_'])) {
				$this->request->get['route'] = $this->config->get('action_error');
			}
		}

		return null;
	}

	/**
	 * Rewrite
	 *
	 * @param string $link
	 *
	 * @return string
	 */
	public function rewrite(string $link): string {
		$url_info = parse_url(str_replace('&amp;', '&', $link));

		// Build the url
		$url = '';

		if ($url_info['scheme']) {
			$url .= $url_info['scheme'];
		}

		$url .= '://';

		if ($url_info['host']) {
			$url .= $url_info['host'];
		}

		if (isset($url_info['port'])) {
			$url .= ':' . $url_info['port'];
		}

		parse_str($url_info['query'], $query);

		// Start changing the URL query into a path
		$paths = [];

		// Parse the query into its separate parts
		$parts = explode('&', $url_info['query']);

		foreach ($parts as $part) {
			$pair = explode('=', $part);

			if (isset($pair[0])) {
				$key = (string)$pair[0];
			}

			if (isset($pair[1])) {
				$value = (string)$pair[1];
			} else {
				$value = '';
			}

			$index = $key . '=' . $value;

			if (!isset($this->data[$index])) {
				$this->data[$index] = $this->model_design_seo_url->getSeoUrlByKeyValue((string)$key, (string)$value);
			}

			if ($this->data[$index]) {
				$paths[] = $this->data[$index];

				unset($query[$key]);
			}
		}

		$sort_order = [];

		foreach ($paths as $key => $value) {
			$sort_order[$key] = $value['sort_order'];
		}

		array_multisort($sort_order, SORT_ASC, $paths);

		// Build the path
		$url .= str_replace('/index.php', '', $url_info['path']);


		// исключение из урль чтобы небыло пустот и / .
		if ($this->short_routes) {
			$excludedVal = ['ru-ru', 'common/home', 'product/product', 'product/category', 'product/manufacturer.info', 'information/information'];
		} else {
			$excludedVal = ['ru-ru', 'common/home'];
		}

		foreach ($paths as $result) {
			if (!in_array($result['value'], $excludedVal, true)) {
				$url .= '/' . $result['keyword'];
			}
		}

		// на случай когда приходит роут без чпу, домен закрываем слешем
		if (count($paths) === 1) $url .= '/';


		// Rebuild the URL query
		if ($query) {
			$url .= '?' . str_replace(['%2F'], ['/'], http_build_query($query));
		}

		return $url;
	}
}
