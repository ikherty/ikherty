
function createObject() {
    return new XMLHttpRequest();
}
    
var http = createObject();

function searchNameq() {
    searchq = document.getElementById('searchq').value;
    document.getElementById('msg').style.display = "block";
    document.getElementById('msg').innerHTML = "Searching for <strong>" + searchq+"";
    nocache = Math.random();
    http.open('get', 'vendor/in-search.php?name='+searchq+'&nocache = '+nocache);
    http.onreadystatechange =  searchNameqReply;
    http.send(null);
}

function FindOnPageGo() {
    search = '/'+searchq+'/g';
    pr = document.getElementById('search-result').innerHTML;
    result = pr.match(/>(.*?)</g);
    result_arr = [];

    for(var i=0; i<result.length;i++) {
        result_arr[i] = result[i].replace(eval(search), '<span style="background-color:yellow;">'+searchq+'</span>');
    }
    for(var i=0; i<result.length;i++) {
        pr=pr.replace(result[i],result_arr[i])
    }
    document.getElementById('search-result').innerHTML = pr;
}

function searchNameqReply() {
    if(http.readyState == 4){
        var response = http.responseText;
        document.getElementById('search-result').innerHTML = response;
        FindOnPageGo();
    }
}