$(document).ready(function(){
  
  
  $('.language-current').on('click', function(e) {
    e.preventDefault();
    e.stopPropagation();
    $('.language-current').toggleClass('active');
    $('.language-dropdown').toggleClass('active');
  });
  
  $(document).on('click', function(e) {
    if (!$(e.target).closest('.language-switcher').length) {
      $('.language-dropdown').removeClass('active');
    }
  });
  
  $('.language-option').on('click', function(e) {
    e.preventDefault();
    const lang = $(this).data('lang');
    const langName = $(this).find('.language-name').text();
    
    const currentLangName = $('.language-current .language-name').text();
    
    $('.language-current .language-name').text(langName);
    $('.language-current').toggleClass('active');
    $('.language-option').each(function() {
      const optionLangName = $(this).find('.language-name').text();
      if (optionLangName === langName) {
        $(this).find('.language-name').text(currentLangName);
      } else if (optionLangName === currentLangName) {
        $(this).find('.language-name').text(langName);
      }
    });
    
    $('.language-dropdown').removeClass('active');
    
    
  });
  
  
  
  $('.way ').waypoint({
    handler: function() {
    $(this.element).addClass("way--active")
    },
    offset: '100%'
  });

 
});  