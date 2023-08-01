import {initializeApp} from 'firebase/app'
import {collection, getDocs,getFirestore} from 'firebase/firestore'



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

function addMemberToList(memberData){
    const list = document.getElementById('memberList')

    const memberElement = document.createElement('p')
    memberElement.innerText=memberData.Name

    list.appendChild(memberElement)
}


const db = getFirestore(app);

const querySnapshot = await getDocs(collection(db, "Users"));
querySnapshot.forEach((doc) => {
  console.log(`${doc.id} => ${doc.data()['Age']}`);
  addMemberToList(doc.data())
});
