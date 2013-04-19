
var sel = null;
function selec(obj) {
  if (sel!=null) sel.className = '';
  obj.className = 'active';
  sel=obj;    
}