Sortable.create(row1, {
    animation: 150,
    ghostClass: 'ghostbox',
  });

//shuffle function
$(function () {
    var rowList = ["row1"];

    for (var rowId of rowList) {
        var parent = $("#" + rowId);
        var divs = parent.children();
        while (divs.length) {
        parent.append(divs.splice(Math.floor(Math.random() * divs.length), 1)[0]);
        }
    }
});



function getD15Order() {
    var rowList = ["row1"];
    var boundaries = ["0","16"];
    var colourBlockOrder = [];

    colourBlockOrder.push(parseInt(boundaries[0]));
    i = 0;
    for (var rowId of rowList) {
        var parent = $("#" + rowId);
        var divs = parent.children();
        for (var divChild of divs) {
            colourBlockOrder.push(parseInt($(divChild).attr("data-position")))
        }
        colourBlockOrder.push(parseInt(boundaries[i + 1]))
        i++
        
    }

    return colourBlockOrder;

}

//get current order on click
$("#submitButton").click(function () {
    d15Order = getD15Order();
    localStorage.setItem("d15", JSON.stringify(d15Order))
    console.log(d15Order)
});