var TableManaged = function () {

    return {

        //main function to initiate the module
        init: function () {
            if (!jQuery().dataTable) {
                return;
            }

            $('#sample_2').dataTable({
                "aLengthMenu": [
                [5, 15, 20, -1],
                    [5, 15, 20, "Все"] // change per page values here
                    ],
                // set the initial value
                "iDisplayLength": 20,
                "sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span6'i><'span6'p>>",
                "sPaginationType": "bootstrap",
                "oLanguage": {
                    "sLengthMenu": "_MENU_ на странице",
                    "sEmptyTable": "Нет данных в таблице",
                    "oPaginate": {
                        "sPrevious": "Назад",
                        "sNext": "Вперед"
                    }
                },
                "aoColumnDefs": [{
                    'bSortable': false,
                    'aTargets': [0]
                }
                ]
            });

            jQuery('#sample_2 .group-checkable').change(function () {
                var set = jQuery(this).attr("data-set");
                var checked = jQuery(this).is(":checked");
                jQuery(set).each(function () {
                    if (checked) {
                        $(this).attr("checked", true);
                    } else {
                        $(this).attr("checked", false);
                    }
                });
                jQuery.uniform.update(set);
            });

            jQuery('#sample_2_wrapper .dataTables_filter input').addClass("m-wrap small"); // modify table search input
            jQuery('#sample_2_wrapper .dataTables_length select').addClass("m-wrap xsmall"); // modify table per page dropdown

            $("#news_edit").click(function(event){
                event.preventDefault();
                var searchIDs = $("#sample_2 input:checkbox:checked").map(function(){
                  return $(this).val();
              }).get();
                window.location.href = window.location.origin + '/secret/text/edit/' + searchIDs[0];
            });

            $("#photo_edit").click(function(event){
                event.preventDefault();
                var searchIDs = $("#sample_2 input:checkbox:checked").map(function(){
                    return $(this).val();
                }).get();
                if(searchIDs[0])
                window.location.href = window.location.origin + '/secret/photo/edit/' + searchIDs[0];
            });

            $("#video_edit").click(function(event){
                event.preventDefault();
                var searchIDs = $("#sample_2 input:checkbox:checked").map(function(){
                    return $(this).val();
                }).get();
                window.location.href = window.location.origin + '/secret/video/edit/' + searchIDs[0];
            });

            $("#news_delete").click(function(event){
                event.preventDefault();
                if (confirm("Вы уверены, что хотите удалить выбранные новости ?") == false) {
                    return;
                }
                var searchIDs = $("#sample_2 input:checkbox:checked").map(function(){
                    if ($(this).val() != 'on') {
                        return $(this).val();
                    };
                }).get();
                var request = $.ajax({
                    url: "/secret/text/delete",
                    type: "POST",
                    data: { 'items' : searchIDs},
                    dataType: "json"
                });
                request.done(function(data) {
                    window.location.href = window.location.origin + '/secret/text';
                });

            });

            $("#photo_delete").click(function(event){
                event.preventDefault();
                if (confirm("Вы уверены, что хотите удалить выбранные новости ?") == false) {
                    return;
                }
                var searchIDs = $("#sample_2 input:checkbox:checked").map(function(){
                    if ($(this).val() != 'on') {
                        return $(this).val();
                    };
                }).get();
                var request = $.ajax({
                    url: "/secret/photo/delete",
                    type: "POST",
                    data: { 'items' : searchIDs},
                    dataType: "json"
                });
                request.done(function(data) {
                    window.location.href = window.location.origin + '/secret/photo';
                });

            });
        }
    };

}();