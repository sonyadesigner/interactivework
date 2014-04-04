$(function() {
    $(".resizable1").resizable({
        autoHide: false,
        handles: 'e',
        resize: function(e, ui) {
            var parent = ui.element.parent(),
                remainingSpace = parent.width() - ui.element.outerWidth() -40,
                divTwo = ui.element.next(),
                leftHeight = $('.resizable:first').outerHeight(),
                rightHeight = $('.resizable:last').outerHeight(),
                newHeight,
                divTwoWidth = remainingSpace;
                divTwo.width(divTwoWidth);
            if (leftHeight >= rightHeight){
                newHeight = leftHeight;
            } else {
                newHeight = rightHeight;
            }
            $('.ui-resizable-e').css({'height':newHeight});
        },
        stop: function(e, ui) {
            var parent = ui.element.parent();
            ui.element.css({
                width: (ui.element.width() + 40)/parent.width()*100+"%",
            });
        }
    });
});