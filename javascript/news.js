const news = document.getElementById("news");
const options = {
method: 'GET',
headers: {
'X-RapidAPI-Host': 'free-news.p.rapidapi.com',
'X-RapidAPI-Key': 'f108cb420bmsh2871785c6b77e90p1ff9e0jsnef2a0d80c927'
}
};

fetch('https://free-news.p.rapidapi.com/v1/search?q=company&lang=fr', options)
.then(response => response.json())
.then(response=>{
console.log(response.articles);
for(var i=0;i<response.articles.length;i++){
    if( response.articles[i].media != null && response.articles[i].media != "" ){
    news.innerHTML+= "<div class=\"col-md-12\">"
    +  "<div class=\"row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative\">"
       + "<div class=\"col-auto d-flex justify-content-center d-lg-block\">"
            +"<img src=\" " + response.articles[i].media + "\" width=\"200\" > </img>"
        +"</div>"
            +"<div class=\"col p-4 d-flex flex-column position-static\">"
                +  "<strong class=\"d-inline-block mb-2 text-primary\">"+ response.articles[i].title +"</strong>"
                +  "<div class=\"mb-1 text-muted\">"+ response.articles[i].author +"</div>"
                +  "<p class=\"card-text mb-auto\">Publié le "+ response.articles[i].published_date +"</p>"
                + "<a href=\" " + response.articles[i].link + " \"   >plus de details</a>"
            +"</div>"
     + "</div>"
   + "</div>";
}}
})
.catch(err => console.error(err));

