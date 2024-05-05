$(document).ready(function() {
    $('.body-row[data-toggle="dropdown"]').click(function() {
        var $dropdownRow = $(this).next('.dropdown-row');

        if ($dropdownRow.is(':visible')) {
            $dropdownRow.slideUp();
            $(this).find('i').removeClass('bi-chevron-up').addClass('bi-chevron-down');
        } else {
            $dropdownRow.slideDown();
            $(this).find('i').removeClass('bi-chevron-down').addClass('bi-chevron-up');
        }
    });

    // ===========POSITION TABLE==============

    $('.table-row-6-header[data-toggle="dropdown"]').click(function() {

        var department_id = $(this).data('department-id');
        console.log(department_id);

        // $('#position-'+department_id).slideDown();
        
        // var $dropdownRow = $(this).next('.dropdown-row');

        if ( $('#position-'+department_id).is(':visible')) {
            $('#position-'+department_id).slideUp();
            $(this).find('i').removeClass('bi-chevron-up').addClass('bi-chevron-down');
        } else {
            $('#position-'+department_id).slideDown();
            $(this).find('i').removeClass('bi-chevron-down').addClass('bi-chevron-up');
        }
    });


    $("#departmentSelect").change(function() {
        var selectedDepartmentId = $(this).val();
        console.log("Selected department ID: " + selectedDepartmentId);
      });
      $("#departmentSelect").trigger("input");
});



