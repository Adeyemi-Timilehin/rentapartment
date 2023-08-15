import { useState } from "react";



    
function App() {
const [item, setItem]=useState('')
const [names, setNames]=useState([]);

function handleSubmit(){
  setNames([...names,item]);
  setItem('');
  console.log(item);
}

function handleRemove(id){
  setNames(names.filter(name=>name !==id) );
}
  return (<div className="App">
<>
<div>
<input type="text" value={item} onChange={(e)=>setItem(e.target.value)}/>
<button onClick={handleSubmit}>Submit</button>
</div>
<ul>{names.map((name)=>
<li key={name}>{name}{''}
<button style={{ marginLeft:'20px',color:'green',backgroundColor:'white' }} onClick={()=>handleRemove(name)}>Edit</button>
<button style={{ marginLeft:'20px',color:'blue',backgroundColor:'white' }} onClick={()=>handleRemove(name)}>Delete</button>
</li>
)}</ul>
</>
  </div>);
}


export default App;
