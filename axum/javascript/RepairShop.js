$('#typeNo').click(function() {
    $('#warranty').show();
    $('#YesWarranty').show();
    $('#no').show();
    $('#typeNo').hide();
    $('#errorMessage').hide();
});

$('#typeYes').click(function() {
    $('#warranty').hide();
    $('#YesWarranty').hide();
    $('#no').hide();
    $('#typeNo').hide();
    $('#errorMessage').show();
});

$('#YesWarranty').click(function() {
    $('#proceedToPaperwork').hide();
    $('#followUp').show();
    $('#options').show();
});

$('#no').click(function() {
    $('#proceedToPaperwork').show();
    $('#errorMessage').hide();
    $('#followUp').hide();
    $('#options').hide();
});

$('#Hardware').click(function() {
    $('#errorMessage').show();
    $('#proceedToPaperwork').hide();
});

$('#Software').click(function() {
    $('#proceedToPaperwork').show();
    $('#errorMessage').hide();
});

$('#Unsure').click(function() {
    $('#proceedToPaperwork').show();
    $('#errorMessage').hide();
});

// the following are messages and questions that are hidden when the page loads
$('#YesWarranty').hide();
$('#no').hide();
$('#errorMessage').hide();
$('#proceedToPaperwork').hide();
$('#followUp').hide();
$('#options').hide();
$('#warranty').hide();