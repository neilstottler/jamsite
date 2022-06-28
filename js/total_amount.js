var g_Url = "https://jam.tf2maps.net/script/livecount.php";
var g_Element = document.querySelector(".amount_raised");

function GetAmount()
{
    return new Promise(async (rs, rj) => {
    
        var data = await fetch(g_Url).then(r => r.json());
        var amount = data.amount;
        rs(amount);
        
    });
}

async function UpdateCounter()
{
    if(!g_Element)
        return;
    
    var count = await GetAmount();
    g_Element.innerText = `Raised: $${count}`;
}