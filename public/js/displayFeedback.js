function displayFeedback(id, feedB) 
{
    let f = $(id);

    if (feedB[0] === "error") 
    {
        f.addClass("alert alert-danger");
    } 
    else 
    {
        f.removeClass("alert alert-danger").addClass("alert alert-success");
    }
    f.html(feedB[1]);
}