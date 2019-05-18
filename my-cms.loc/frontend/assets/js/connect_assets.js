/**
 * Created by Alex on 22.08.2016.
 */

var include_js = [
  'assets/js/jquery.min.js',
    'assets/js/db_connect.js'

];

function include(array_js) {
  for (var i=0; i<=array_js.length-1; i++){

    var path = window.location;
    var path_js = path + array_js[i];
    var script = document.createElement('script');

    script.src = path_js;
    document.getElementsByTagName('head')[0].appendChild(script);
  }
}

function includeOne(array_js) {
  var arr_scripts = document.getElementsByTagName('script');

  for (var j=0; j<=array_js.length-1; j++){
    var is_connect_js = false;

    for (var i=0; i<=arr_scripts.length-1; i++){
      var path_scripr_js = arr_scripts[i].src.replace(window.location, '');
      if (array_js[j] == path_scripr_js){
        is_connect_js = true;
      }
    }

    if (!is_connect_js){
      var script = document.createElement('script');
      script.src = array_js[j];
      document.getElementsByTagName('head')[0].appendChild(script);
    }

  }
}

includeOne(include_js);
