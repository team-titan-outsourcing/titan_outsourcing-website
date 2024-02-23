let selected_prev = "about";
function selected_content(select_id){
    selected_id = document.getElementById(select_id);
    selected_prev_id = document.getElementById(selected_prev);
    selected_id.classList.add('h-selected');
    selected_prev_id.classList.remove('h-selected');
    selected_prev = select_id;
}