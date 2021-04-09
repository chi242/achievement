
// function generate_year_range(start, end) {
//   var years = "";
//   for (var year = start; year <= end; year++) {
//       years += "<option value='" + year + "'>" + year + "</option>";
//   }
//   return years;
// }


// var selectYear = document.getElementById("year");
// var selectMonth = document.getElementById("month");

// var createYear = generate_year_range(1970, 2200);

// document.getElementById("year").innerHTML = createYear;

var calendar = document.getElementById("calendar");
var lang = calendar.getAttribute('data-lang');

var months = ["1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月"];
var days = ["日", "月", "火", "水", "木", "金", "土"];

var dayHeader = "<tr>";
var day;
for (day in days) {
  dayHeader += "<th data-days='" + days[day] + "'>" + days[day] + "</th>";
}
dayHeader += "</tr>";

document.getElementById("thead-month").innerHTML = dayHeader;

var today = new Date();
var currentMonth = today.getMonth();
var currentYear = today.getFullYear();

var monthAndYear = document.getElementById("monthAndYear");
console.log(monthAndYear.innerHTML)
showCalendar(currentMonth, currentYear);



function showCalendar(month, year) {

  var firstDay = ( new Date( year, month ) ).getDay();
  var tbl ;
  tbl = document.getElementById("calendar-body");

  tbl.innerHTML = "";

//   monthAndYear.innerHTML = months[month] + " " + year;
//  selectYear.value = year;
//   selectMonth.value = month;

  // creating all cells
  var date = 1;
  for ( var i = 0; i < 6; i++ ) {
      var row = document.createElement("tr");
      var cell, cellText;
      for ( var j = 0; j < 7; j++) {
          if ( i === 0 && j < firstDay ) {
              cell = document.createElement( "td" );
              cellText = document.createTextNode("");
              cell.appendChild(cellText);
              row.appendChild(cell);
              
            // マウスオーバー処理
              var element = element.addEventListener("mouseover", function (event) {
                event.target.style.select.color = "green";
                setTimeout(function () {
                  event.target.style.color = "";
                }, 500);
              }, false);
  
          } else if (date > daysInMonth(month, year)) {
              break;
          } else {
              cell = document.createElement("td");
              cell.setAttribute("data-date", date);
              cell.setAttribute("data-month", month + 1);
              cell.setAttribute("data-year", year);
              cell.setAttribute("data-month_name", months[month]);
              cell.className = "date-picker";
              cell.innerHTML = "<span>" + date + "</span>";

              if ( date === today.getDate() && year === today.getFullYear() && month === today.getMonth() ) {
                  cell.className = "date-picker selected";
              }
              row.appendChild(cell);
              date++;
              

  
              
          }
      }

      tbl.appendChild(row);
  }
  
    // function over(x) {
    //     x.style.backgroundColor = "blue";
    // }

    // function leave(x) {
    //     x.style.backgroundColor = "null";
    // }


}

function daysInMonth(iMonth, iYear) {
  return 32 - new Date(iYear, iMonth, 32).getDate();
}
