$(document).ready(function() {
  var $products = $('.product-wrapper'),
      $filters = $("#filters input[type='checkbox']"),
      product_filter = new ProductFilterLevel2($products, $filters);
  product_filter.init();
});

function ProductFilterLevel2(products, filters) {
  var _this = this;

  this.init = function() {
    this.products = products;
    this.filters = filters;
    this.bindEvents();
  };

  this.bindEvents = function() {
    this.filters.click(this.filterGridProducts);
    $('#none').click(this.removeAllFilters);
  };

  this.filterGridProducts = function() {
    //hide all
    _this.products.hide();
    var filteredProducts = _this.products;
    //filter by colour, size, shape etc
    var filterAttributes = $('.filter-attributes'); 
    // for each attribute check the corresponding attribute filters selected
    filterAttributes.each(function(){
      var selectedFilters = $(this).find('input:checked');
      // if selected filter by the attribute
      if (selectedFilters.length) {
        var selectedFiltersValues = [];
        selectedFilters.each(function() {
          var currentFilter = $(this);
          selectedFiltersValues.push("[data-" + currentFilter.attr('name') + "='" + currentFilter.val() + "']");
        });
        filteredProducts = filteredProducts.filter(selectedFiltersValues.join(','));
      }
    });
      filteredProducts.show();
  };

  this.removeAllFilters = function() {
    _this.filters.prop('checked', false);
    _this.products.show();
  }
}