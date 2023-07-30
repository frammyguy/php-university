$('#adminAddBtn').click(function() {
    $('#adminForm').slideDown();
    $('#adminRemoveForm').slideUp();
    $('#HistoryForm').slideUp();
    $('#AddDocForm').slideUp();
    $('#RemoveDocForm').slideUp();
});
$('#adminRemoveBtn').click(function() {
    $('#adminForm').slideUp();
    $('#adminRemoveForm').slideDown();
    $('#HistoryForm').slideUp();
    $('#AddDocForm').slideUp();
    $('#RemoveDocForm').slideUp();
});
$('#HistoryBtn').click(function() {
    $('#adminForm').slideUp();
    $('#adminRemoveForm').slideUp();
    $('#HistoryForm').slideDown();
    $('#AddDocForm').slideUp();
    $('#RemoveDocForm').slideUp();
});
$('#AddDocBtn').click(function() {
    $('#adminForm').slideUp();
    $('#adminRemoveForm').slideUp();
    $('#HistoryForm').slideUp();
    $('#AddDocForm').slideDown();
    $('#RemoveDocForm').slideUp();
});
$('#RemoveDocBtn').click(function() {
    $('#adminForm').slideUp();
    $('#adminRemoveForm').slideUp();
    $('#HistoryForm').slideUp();
    $('#AddDocForm').slideUp();
    $('#RemoveDocForm').slideDown();
});