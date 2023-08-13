colorsList = [
    '#3781C1',
    '#3583B4',
    '#3B84A7',
    '#39859C',
    '#3B8690',
    '#3F8782',
    '#588473',
    '#6C8164',
    '#837B5D',
    '#907660',
    '#9E6E6F',
    '#9F6D7C',
    '#9C6D89',
    '#927099',
    '#8F6FA4',
    '#8073B2'
]

for (i = 0; i < colorsList.length; i++){
    document.getElementById(colorsList[i]).style.backgroundColor = colorsList[i];
}


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
    var rowList = document.querySelectorAll(".hue-box")
    var boxList = []
    for (i = 0; i < rowList.length; i++){
        boxList.push(colorsList.indexOf(rowList[i].id));
    }

    print(boxList)

    return boxList

    // var rowList = ["row1"];
    // var boundaries = ["0","15"];
    // var colourBlockOrder = [];

    // colourBlockOrder.push(parseInt(boundaries[0]));
    // i = 0;
    // for (var rowId of rowList) {
    //     var parent = $("#" + rowId);
    //     var divs = parent.children();
    //     for (var divChild of divs) {
    //         colourBlockOrder.push(parseInt($(divChild).attr("data-position")))
    //     }
    //     colourBlockOrder.push(parseInt(boundaries[i + 1]))
    //     i++
    // }

    // return colourBlockOrder;

}

//get current order on click
$("#submitButton").click(function () {
    d15Order = getD15Order();
    localStorage.setItem("d15", JSON.stringify(d15Order))
});