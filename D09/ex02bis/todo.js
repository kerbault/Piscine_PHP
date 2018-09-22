var ft_list;

$(document).ready(function() {
  var cookie = [];
  ft_list = $("#ft_list");

  if (document.cookie) {
    cookie = JSON.parse(document.cookie);
    cookie.forEach(function(old_task) {
      add_task(old_task);
    });
  }
});

function new_task() {
  var task = prompt("To do ?");

  if (task != "" && task.trim()) {
    add_task(task);
  }
}

function add_task(task) {
  ft_list.prepend($("<div>" + task + "</div>").click(del_task));
  var task = ft_list.children();
  var newCookie = [];
  for (var i = 0; i < task.length; i++) newCookie.unshift(task[i].innerHTML);
  document.cookie = JSON.stringify(newCookie);
}

function del_task() {
  if (confirm(" not to do ?")) {
    this.remove();
  }
}
