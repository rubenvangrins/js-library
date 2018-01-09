(function(window){
  function defineLibrary(){
    var Library = {};
    Library.Alert = function (){
      alert("Dit is een test om te kijken of de library werkt.");
    };
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