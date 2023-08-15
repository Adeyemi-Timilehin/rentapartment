import React, {useState} from "react";
const people = [{
  id: 0,
  name: 'Creola Katherine Johnson',
  profession: 'mathematician',
}, {
  id: 1,
  name: 'Mario José Molina-Pasquel Henríquez',
  profession: 'chemist',
}, {
  id: 2,
  name: 'Mohammad Abdus Salam',
  profession: 'physicist',
}, {
  name: 'Percy Lavon Julian',
  profession: 'chemist',  
}, {
  name: 'Subrahmanyan Chandrasekhar',
  profession: 'astrophysicist',
}];

function ListItem(){
  const chemists=people.filter((person)=>person.profession==='chemist');

  return(<>
  {chemists.map((person)=><li key={person.id}>{person.name}{"   "}{person.profession}</li>)}
  </>

  )
}

function Button({ onClick, children }) {
    return (
      <button onClick={e => {
        e.stopPropagation();
        onClick();
      }}>
        {children}
      </button>
    );
  }
  
  function Toolbar() {
    return (
      <div style={{ backgroundColor:'grey', padding:'20px' }} onClick={() => {
        alert('You clicked on the toolbar!');
      }}>
        <Button onClick={() => alert('Playing!')}>
          Play Movie
        </Button>
        <Button onClick={() => alert('Uploading!')}>
          Upload Image
        </Button>
        <form onSubmit={(e) =>{e.preventDefault(); alert('Submitting!');}
      }>
        <input />
        <button>Send</button>
      </form>
      </div>)};
    function FeedbackForm() {
        const [text, setText] = useState('');
        const [status, setStatus] = useState('typing');
      
        async function handleSubmit(e) {
          e.preventDefault();
          setStatus('sending');
          await sendMessage(text);
          setStatus('sent');
        }
      
        const isSending = status === 'sending';
        const isSent = status === 'sent';
      
        if (isSent) {
          return <h1>Thanks for feedback!</h1>
        }
      
        return (
          <form onSubmit={handleSubmit}>
            <p>How was your stay at The Prancing Pony?</p>
            <textarea
              disabled={isSending}
              value={text}
              onChange={e => setText(e.target.value)}
            />
            <br />
            <button
              disabled={isSending}
              type="submit"
            >
              Send
            </button>
            {isSending && <p>Sending...</p>}
          </form>
        );
      }
      
      // Pretend to send a message.
      function sendMessage(text) {
        return new Promise(resolve => {
          setTimeout(resolve, 2000);
        });
      }