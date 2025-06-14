// version 4x tweak for opencart-russia.ru


// Транслит названия в чпу

const ru2en = {
  fromChars: 'абвгдезиклмнопрстуфыэйхёц',
  toChars: 'abvgdeziklmnoprstufyejhec',
  biChars: { 'ж': 'zh', 'ч': 'ch', 'ш': 'sh', 'щ': 'sch', 'ю': 'yu', 'я': 'ya', '&': '-and-' },
  vowelChars: 'аеёиоуыэюя',
  translit(str) {
    str = str.replace(/[_\s\.,?!\[\](){}\\\/"':;]+/g, '-')
             .toLowerCase()
             .replace(new RegExp(`(ь|ъ)([${this.vowelChars}])`, 'g'), 'j$2')
             .replace(/(ь|ъ)/g, '');

    let _str = '';
    for (let x = 0; x < str.length; x++) {
      const index = this.fromChars.indexOf(str.charAt(x));
      _str += index > -1 ? this.toChars.charAt(index) : str.charAt(x);
    }
    str = _str;

    _str = '';
    for (let x = 0; x < str.length; x++) {
      _str += this.biChars[str.charAt(x)] || str.charAt(x);
    }
    str = _str;

    str = str.replace(/j{2,}/g, 'j')
             .replace(/[^-0-9a-z]+/g, '')
             .replace(/-{2,}/g, '-')
             .replace(/^-+|-+$/g, '');

    return str;
  }
};

function setTranslit(src, dst, force) {
  const srcInput = document.querySelector(`input[name="${src}"]`);
  const dstInput = document.querySelector(`input[name^="${dst}"]`);

  if (srcInput && dstInput) {

    let wasEmptyOnLoad = dstInput.value.trim() === '';

    srcInput.addEventListener('input', () => {
      const srcVal = srcInput.value;
      const dstVal = dstInput.value;

      if (force || wasEmptyOnLoad || dstVal.trim() === '') {
        dstInput.value = ru2en.translit(srcVal).substring(0, 64);
      }
    });

    dstInput.addEventListener('input', () => {
      if (dstInput.value.trim() === '') {
        wasEmptyOnLoad = true;
      }
    });
  }
}

document.addEventListener('DOMContentLoaded', () => {
  // Products
  setTranslit('product_description[1][name]', 'product_seo_url', false);
  // Info Articles
  setTranslit('information_description[1][title]', 'information_seo_url', false);
  // Categories
  setTranslit('category_description[1][name]', 'category_seo_url', false);
  // Manufacturer
  setTranslit('name', 'manufacturer_seo_url', true);
  // topic
  setTranslit('topic_description[1][name]', 'topic_seo_url', true);  
  // article
  setTranslit('article_description[1][name]', 'article_seo_url', true);  
});


// Скрытие полей  isbn итд

document.addEventListener("DOMContentLoaded", function() {

  const tabData = document.querySelector('#tab-data');
  if (!tabData) return;
  const firstFieldset = tabData.querySelector('fieldset');
  const rows = firstFieldset.querySelectorAll('.row.mb-3');
  
  for (let i = 1; i < rows.length; i++) {
      rows[i].style.display = 'none';
  }
  
  const toggleSwitch = `
      <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Дополнительно</label>
          <div class="col-sm-10">
              <div class="input-group">
                  <div id="input-show-hidden" class="form-check form-switch form-switch-lg">
                      <input type="checkbox" id="toggleHiddenFields" class="form-check-input">
                  </div>
              </div>
          </div>
      </div>
  `;
  
  rows[0].insertAdjacentHTML('afterend', toggleSwitch);
  
  const toggleHiddenFields = document.getElementById('toggleHiddenFields');
  
  toggleHiddenFields.addEventListener('change', function() {
      for (let i = 1; i < rows.length; i++) {
          rows[i].style.display = this.checked ? 'flex' : 'none';
      }
  });
});