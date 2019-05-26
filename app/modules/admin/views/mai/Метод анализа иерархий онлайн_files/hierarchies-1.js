function fDrob(s) {
    var str = s;
    if (s != '1') {
        var m = s.split('/');
        str = '1/' + m[0];
        if (m.length == 2) {
            if (m[0] != '1') str = m[1] + '/' + m[0];
            else str = m[1];
        }
    }
    return str;
}

function fLevelName(h, i) {
    var h1 = h + 1;
    var id = 'n-' + i + '-' + h1;
    var id1 = 'name' + h + '-' + i;
    document.getElementById(id).innerHTML = document.getElementById(id1).value;
}

function fMatrix(h, g, i, j) {
    var id = 'm-' + h + '-' + g + '-' + i + '-' + j;
    var id1 = 'm-' + h + '-' + g + '-' + j + '-' + i;
    document.getElementById(id1).value = fDrob(document.getElementById(id).value);
}