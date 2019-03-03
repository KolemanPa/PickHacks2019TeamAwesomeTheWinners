function sportPost(sport){
    var xmlhttp = new XMLHttpRequest();
    var url = "https://www.planagame.com/discussion.php?sport="+sport;        // either https://www.dns or localhost:2020
    xmlhttp.onreadystatechange = function(){
        if(this.readyState === 4 && this.status === 200)
        {
            generatePosts(JSON.parse(this.responseText));
        }
    }
    xmlhttp.open("GET", url, true);
    xmlhttp.send();
}


function testStuff(){
    var arr2 = [1,4,6,3,6,3,4,7,6];
    generatePosts(arr2);
}


function generatePosts(arr){
    if(arr){
        var html = '';
        arr.forEach(obj => {
            html += `
                <p> ${obj} </p>
            `;
        });
        console.log(html);
        document.getElementById('posts').innerHTML=html;
    }
}


function basketballPost(){
    var xmlhttp = new XMLHttpRequest();
    var url = "localhost:3306?sport=football";        // either https://www.dns or localhost:2020
    xmlhttp.onreadystatechange = function(){
        if(this.readyState === 4 && this.status === 200)
        {
            generatePosts(JSON.parse(this.responseText));
        }
    }
    xmlhttp.open("GET", url, true);
    xmlhttp.send();
}


function baseballPost(){
    var xmlhttp = new XMLHttpRequest();
    var url = "discussion.php?sport=football";        // either https://www.dns or localhost:2020
    xmlhttp.onreadystatechange = function(){
        if(this.readyState === 4 && this.status === 200)
        {
            generatePosts(JSON.parse(this.responseText));
        }
    }
    xmlhttp.open("GET", url, true);
    xmlhttp.send();
}

