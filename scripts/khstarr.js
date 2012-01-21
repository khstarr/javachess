
function findMoves(that)
{
	moves = [];
	$(".column").removeClass('canmove');
	var from = $(that).data('square');
	for( var i = 0 ; i < 128 ; i++ )
	{
        if(validateMove(from, i, currentPlayer)==true)
			{
				thisquare = $("#board").find("[data-square='" + i + "']");
				$(thisquare).addClass('canmove');
				moves.push(i);
			}
    }
	console.log("possible moves: " + moves);
}
