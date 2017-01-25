//Cambiar los settings del datepicker de materialize

function initDatepicker(data) {

var defaults = {
    selectMonths: true, // Creates a dropdown to control month
    formatSubmit: 'yyyy-mm-dd',

    // The title label to use for the month nav buttons
    labelMonthNext: 'Mes siguiente',
    labelMonthPrev: 'Mes anterior',

    // The title label to use for the dropdown selectors
    labelMonthSelect: 'Selecciona un mes',
    labelYearSelect: 'Selecciona un año',

    // Months and weekdays
    monthsFull: [ 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre' ],
    monthsShort: [ 'Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic' ],
    weekdaysFull: [ 'Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado' ],
    weekdaysShort: [ 'Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab' ],

    // Materialize modified
    weekdaysLetter: [ 'D', 'L', 'M', 'I', 'J', 'V', 'S' ],

    // Today and clear
    today: 'Hoy',
    clear: 'Limpiar',
    close: 'Cerrar',
    onSet: function (ele) {
                 if(ele.select){
                     this.close();
                 }
             },

};
var opciones = $.extend(defaults, data); // concatenar las opciones con las de default

$('.datepicker').pickadate(opciones);


}