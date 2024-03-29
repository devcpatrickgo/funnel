{include file="user.form.js"}
{include file="user.list.js"}
{include file="user.group.js"}
{include file="user.global.js"}
{include file="user.delete.js"}
{include file="user.search.js"}

{literal}
function user_process(loc, hist) {
	var args = loc.split("-");

	$("list").className = "adesk_hidden";
	$("form").className = "adesk_hidden";

	try {
		var func = eval("user_process_" + args[0]);

		if (typeof func == "function")
			func(args);
	} catch (e) {
		if (typeof user_process_list == "function")
			user_process_list(args);
	}
}

function user_process_list(args) {
	if (args.length < 2)
		args = ["list", user_list_sort, user_list_offset, user_list_filter];

	user_list_sort = args[1];
	user_list_offset = args[2];
	user_list_filter = args[3];

	user_list_discern_sortclass();

	paginators[1].paginate(user_list_offset);
}

function user_process_form(args) {
	if (args.length < 2)
		args = ['form', '0'];

	var id = parseInt(args[1], 10);

	user_form_load(id);
}

function user_process_delete(args) {
	if (args.length < 2) {
		user_process_list(["list", "0"]);
		return;
	}

	$("list").className = "adesk_block";
	var id = parseInt(args[1], 10);

	user_delete_check(id);
}

function user_process_delete_multi(args) {
	$("list").className = "adesk_block";
	user_delete_check_multi();
}

function user_process_search(args) {
	$("list").className = "adesk_block";
	user_search_check();
}
{/literal}
