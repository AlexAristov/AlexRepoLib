/**
 * Created by Alex on 22.08.2016.
 */

$.ajax({
  url: 'assets/php/db_connect.php',
  data: 'connect=true',
  success: function (data) {
    console.log(data);
  }
});