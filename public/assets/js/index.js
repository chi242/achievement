let calendar = document.getElementById("calendar");
let lang = calendar.getAttribute('data-lang');

let months = ["1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月"];
let days = ["日", "月", "火", "水", "木", "金", "土"];

let dayHeader = "<tr>";
let day;
for (day in days) {
  dayHeader += "<th data-days='" + days[day] + "'>" + days[day] + "</th>";
}
dayHeader += "</tr>";

document.getElementById("thead-month").innerHTML = dayHeader;

// function showCalendar(month, year) {
  const year = today.getFullYear();
  let firstDay = ( new Date( year, month ) ).getDay();
  let tbl ;
  tbl = document.getElementById("calendar-body");

  tbl.innerHTML = "";

  // creating all cells
  let date = 1;
  for ( let i = 0; i < 6; i++ ) {
      let row = document.createElement("tr");
      let cell, cellText;
      for ( let j = 0; j < 7; j++) {
          if ( i === 0 && j < firstDay ) {
              cell = document.createElement( "td" );
              cellText = document.createTextNode("");
              cell.appendChild(cellText);
              row.appendChild(cell);
              
          } else if (date > daysInMonth(month, year)) {
              break;
          } else {
              cell = document.createElement("td");
              cell.setAttribute("data-date", date);
              cell.setAttribute("data-month", month + 1);
              cell.setAttribute("data-year", year);
              cell.setAttribute("data-month_name", months[month]);
              cell.className = "date-picker mousecolor";
              cell.idName = "clickDiary";
              cell.innerHTML = "<span>" + date + "</span>";
              const newA = document.createElement("a");      
              cell.onclick = () => {
              window.location.href ='todos/create'; 
              }
              
              if ( date === today.getDate() && year === today.getFullYear() && month === today.getMonth() ) {
                  cell.className = "date-picker selected";
              }
              row.appendChild(cell);
              date++;
              }
          }
          tbl.appendChild(row);
  
     
//マウスオーバー処理


}


//吹き出し表示

function showBalloon(){
  var objectBalloon = document.getElementById("balloon");
  if (objectBalloon().className == "balloonOn"){
  objectBalloon.className = "balloonOn";
  }else{
  objectBalloon.className = "balloonOff";
  }
  }




function daysInMonth(iMonth, iYear) {
  return 32 - new Date(iYear, iMonth, 32).getDate();
}

// $evaluation = \App\Models\Review::get();

// $evaluation->count();


