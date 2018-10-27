$(function(){
  var selectDensity,
        selectWidth,
        selectLength,
        cartonsQnty = 0,
        sum = 0,
        qnty = 1,
        paperWidth = {

          "57cm_x_17m": {
            "pcsInCrtn":  280,
            "crtnsQnty":  50
          },
          "57cm_x_19m": {
            "pcsInCrtn":  240,
            "crtnsQnty":  30
          },
          "57cm_x_21m": {
            "pcsInCrtn":  240,
            "crtnsQnty":  30
          },
          "57cm_x_27m": {
            "pcsInCrtn":  192,
            "crtnsQnty":  20
          },
          "80cm_x_50m": {
            "pcsInCrtn":  72,
            "crtnsQnty":  60
          }
        };
  function insertPageSizes(){
    var html = '';
    for(var size in paperWidth){
      console.log(size);
    }
  }
  insertPageSizes();

});
