$(document).ready(function(){

    console.log("approveComments.js");

    buttonClick();

});

function showComments(comments){
    $("#comments").html("");
    var html = "";
    for(comment of comments){
        
        html += "<tr>";
        html += "<td>" + comment.name + "</td>";
        html += "<td>" + comment.email + "</td>";
        html += "<td>" + comment.text + "</td>";
        html += `<td><button type="button" class="btn btn-success" data="${comment.id}">Approve</button></td>`;
        html += "</tr>";
    }

    $("#comments").append(html);

    buttonClick();
}


function buttonClick(){
    $(".btn").click(function(){

        var id = $(this).attr("data");
        
        $.ajax({
            url: "models/updateComment.php",
            type: "json",
            method: "POST",
            data:{
                id: id
            },
            success: function(data){
                var comments = JSON.parse(data);
                showComments(comments);
            },
            error: function(err){
                alert(err);
            }
    
        });

    });
}