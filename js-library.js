(function(window){
  function defineLibrary(){
    var Library = {};
    Library.Kleur = function (selector, font){
      var elements = document.querySelector(selector);
      elements.style.color = font;
    }
    Library.Groter = function (selector, width, height){
      var elements = document.querySelector(selector);
      elements.style.height = height + 'px';
      elements.style.width = width + 'px';
    };

    return Library;
  }
  if(typeof(Library) === 'undefined') {
    window.Library = defineLibrary();
  }
})(window);