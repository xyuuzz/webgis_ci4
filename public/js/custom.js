function url_link()
{
    return "http://localhost:8080";
}



function kecamatan(url)
{
    const data = new FormData($("form")[0]);
        fetch(`${url_link()}/${url}`, {
            method : "POST",
            body : data
        })
        .then(response => response.json())
        .then(result => {
            const arr_input = ["geo_json", "nama_kecamatan", "kode", "warna"];
            
            if(result.status)
            {
                window.location = `${url_link()}/kecamatan`;
            }
            else
            {
                arr_input.forEach( (input) => {
                    const index = Object.keys(result).indexOf(input);
                    if( index !== -1 )
                    {
                        $(`.${input}`).remove();
                        $(`#${input}`).addClass("is-invalid");
                        $(`#${input}`).after(`<div class="alert alert-danger mt-2 ${input}">${Object.values(result)[index]}</div>`);
                    }
                    else
                    {
                        $(`#${input}`).removeClass("is-invalid");
                        $(`.${input}`).remove();
                    }
                })
            }
        });
}

$(document).ready( function() 
{
    $(".addKecamatanForm").on("submit", e => {
        e.preventDefault();
    });
    
})