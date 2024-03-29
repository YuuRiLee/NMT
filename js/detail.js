(function() {
    var app;
  
    $('#text-container2').hover(function() {
      return app.init();
    });
  
    app = {
      text: "WHAT IS THIS?",
      index: 0,
      chars: 0,
      speed: 100,
      container: ".text .content",
      init: function() {
        this.chars = this.text.length;
        return this.write();
      },
      write: function() {
        $(this.container).append(this.text[this.index]);
        if (this.index < this.chars) {
          this.index++;
          return window.setTimeout(function() {
            return app.write();
          }, this.speed);
        }
      }
    };
  
  }).call(this);