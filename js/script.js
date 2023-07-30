$('#btn-sort').click(function () {
    $('#sortBox').slideToggle();
});

if ($('#btn-pp').length)
    $('#btn-pp').on('click', function () {
        if ($("#btn-pp[name='tag']").length) {
            $(".box[name='id']").each(function () {
                $(this).show();
                $('#btn-pp').removeAttr('name');
                $('#btn-sort').removeAttr('name');
            });
        } else {
            $('[name="id"]').each(function () {
                if ($(this).hasClass('box-pp')) $(this).show();
                else $(this).hide();
            });
            $('#btn-pp').attr('name', 'tag');
            $('#btn-sort').attr('name', 'btn-pp');
        }
    });
if ($('#btn-po').length)
    $('#btn-po').on('click', function () {
        if ($("#btn-po[name='tag']").length) {
            $(".box[name='id']").each(function () {
                $(this).show();
                $('#btn-po').removeAttr('name');
                $('#btn-sort').removeAttr('name');
            });
        } else {
            $('[name="id"]').each(function () {
                if ($(this).hasClass('box-po')) $(this).show();
                else $(this).hide();
            });
            $('#btn-po').attr('name', 'tag');
            $('#btn-sort').attr('name', 'btn-po');
        }
    });
if ($('#btn-pk').length)
    $('#btn-pk').on('click', function () {
        if ($("#btn-pk[name='tag']").length) {
            $(".box[name='id']").each(function () {
                $(this).show();
                $('#btn-pk').removeAttr('name');
                $('#btn-sort').removeAttr('name');
            });
        } else {
            $('[name="id"]').each(function () {
                if ($(this).hasClass('box-pk')) $(this).show();
                else $(this).hide();
            });
            $('#btn-pk').attr('name', 'tag');
            $('#btn-sort').attr('name', 'btn-pk');
        }
    });

if ($('.sortBtn').length)
    $('.sortBtn').click(function () {
        $('#sortInput').val($(this).text());
        $('#sortBtnSubmit').click();
    });

if ($('#aboutUs').length)
    $('#aboutUs').click(function () {
        $('#aboutUsDiv').slideDown(1000);
        $('#aboutPersonDiv').slideUp(1000);
        $('#docsDiv').slideUp(1000);
        $('#normDocsDiv').slideUp(1000);
    });
if ($('#contacts').length)
    $('#contacts').click(function () {
        $('#aboutUsDiv').slideUp(1000);
        $('#aboutPersonDiv').slideDown(1000);
        $('#docsDiv').slideUp(1000);
        $('#normDocsDiv').slideUp(1000);
    });
if ($('#docs').length)
    $('#docs').click(function () {
        $('#aboutUsDiv').slideUp(1000);
        $('#aboutPersonDiv').slideUp(1000);
        $('#docsDiv').slideDown(1000);
        $('#normDocsDiv').slideUp(1000);
    });
if ($('#normDocs').length)
    $('#normDocs').click(function () {
        $('#aboutUsDiv').slideUp(1000);
        $('#aboutPersonDiv').slideUp(1000);
        $('#docsDiv').slideUp(1000);
        $('#normDocsDiv').slideDown(1000);
    });

if ($('#loadMore').length)
    $('#loadMore').click(function () {
        $('.box').removeAttr('hidden');
        $('#loadMore').remove();
    });