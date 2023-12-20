$(document).ready(function() {
    window._token = $('meta[name="csrf-token"]').attr('content')

    $('.select-all').click(function() {
        let $select2 = $(this).parent().siblings('.select2')
        $select2.find('option').prop('selected', 'selected')
        $select2.trigger('change')
    })
    $('.deselect-all').click(function() {
        let $select2 = $(this).parent().siblings('.select2')
        $select2.find('option').prop('selected', '')
        $select2.trigger('change')
    })

    $('.select2').select2({
        theme: 'bootstrap-5'
    });

    $('.treeview').each(function() {
        var shouldExpand = false
        $(this).find('li').each(function() {
            if ($(this).hasClass('active')) {
                shouldExpand = true
            }
        })
        if (shouldExpand) {
            $(this).addClass('active')
        }
    })

    $('button.sidebar-toggler').click(function() {
        setTimeout(function() {
            $($.fn.dataTable.tables(true)).DataTable().columns.adjust();
        }, 275);
    })
})