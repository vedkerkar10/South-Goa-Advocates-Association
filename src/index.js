import {initializeApp} from 'firebase/app'
import {collection, getDocs,getFirestore,setDoc,doc} from 'firebase/firestore'


// Configuration found in firebase Project Settings
const app = initializeApp({
    apiKey: "AIzaSyBWoQts1E40J83q_FyFGiunE1SW-WdJxLs",
    authDomain: "test-a962f.firebaseapp.com",
    databaseURL: "https://test-a962f-default-rtdb.asia-southeast1.firebasedatabase.app",
    projectId: "test-a962f",
    storageBucket: "test-a962f.appspot.com",
    messagingSenderId: "175899542715",
    appId: "1:175899542715:web:a13adb5571b9ebf387d59e",
    measurementId: "G-TYH8HS7P59"
})


// Adds The Data to the List
function addMemberToList(memberData){
    const list = document.getElementById('memberList')

    const memberElement = document.createElement('p')
    memberElement.innerText=memberData.Name

    list.appendChild(memberElement)
}

// Initializes the Database 
const db = getFirestore(app);


//Database --> Collections --> Documents --> Fields


//Reads The Database Users
const querySnapshot = await getDocs(collection(db, "Users"));
querySnapshot.forEach((doc) => {
  console.log(`${doc.id} => ${doc.data()['Name']}`);
  addMemberToList(doc.data())
});

//Waits For The Button to be pressed . Don't Add Onclick on the button html element cause webpack does some stuff n it doesn't work then ,use event listeners instead
document.getElementById('Buttonnn').addEventListener('click',AddTheDoc)



async function AddTheDoc(){
  //Writes to Database db,Collection Users,Document HELLO,with Field Name = Los Angeles
    await setDoc(doc(db, "Users","HELLO"), {
        Name: "Los Angeles",
      });
}




