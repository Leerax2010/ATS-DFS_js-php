
function read_write(url_file, data="null"){

    return new Promise(function(resolve){
        $.ajax({
            url: url_file,
            type: "POST",
            dataType: "text",
            data: data,
            success: function(content){
                resolve(content)
            },
            error:  function(error_){
                console.log(error_)
            }

        })})
        
}

function addtoserver(file='File path', script_php="script php path", data_to_add='string data to add '){
    let data_to_serv = {"file": file, "data":data_to_add}
    read_write(script_php, data_to_serv)
        .then(function(resposne){
            if(resposne === "OK"){
                return("OK")
            }else{
                alert("ERROR: " + resposne)
            }
        })
}

function deletefromserver(file='File path', script_php="script php path", data_to_delete='string data to delete'){
    let data_to_serv = {"file": file, "data":data_to_delete}
    read_write(script_php, data_to_serv)
        .then(function(resposne){
            if(resposne === "OK"){
                return("OK")
            }else{
                alert("ERROR: " + resposne)
            }
        })
}



