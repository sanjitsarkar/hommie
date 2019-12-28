
  $(document).ready(function () {

    $('.slider').slider({
      indicators: true,
      height: 500,
      transition: 500,
      interval: 6000
    });


    $('select').material_select();
    $('.datepicker').pickadate(
      {
selectMonths: true,
closeOnSelect:true
      }
    );
  });

  var date = document.querySelector('#date');
  var dt = new Date();
  var dts = dt.getDate();
  var months = dt.getUTCMonth()+1;
  switch(months)
  {
    case 1:
    months = "January";
    break;
    case 2:
    months = "February";
    break;
    case 3:
    months = "March";
    break;
    case 4:
    months = "April";
    break;
    case 5:
    months = "May";
    break;
    case 6:
    months = "June";
    break;
    case 7:
    months = "July";
    break;
    case 8:
    months = "August";
    break;
    case 9:
    months = "September";
    break;
    case 10:
    months = "October";
    break;
    case 11:
    months = "November";
    break;
    case 12:
    months = "December";
    break;
  }
  var year = dt.getFullYear();
  date.value = `${dts} ${months}, ${year}`;
$('.modal').modal();

