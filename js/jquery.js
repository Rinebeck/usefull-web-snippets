/* 
 * These snippets take for granted that you have latest jQuery version imported on your site
 */


// Reflect the range input changes on a number input
$("#range-input-id").on('mousemove', function () {
    $("#number-input-id").val($(this).val());
});
// Update the range input if the number input value is modified
$("#number-input-id").on('change', function () {
    $("#range-input-id").val($(this).val());
});