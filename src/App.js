import logo from './logo.svg';
import './App.css';
import Header from './components/Header/Header';
import Offer from './components/MidSection/Offer/Offer';
import Purpose from './components/MidSection/Purpose/Purpose';

function App() {
  return (
    <div className="App">
      <Header></Header>
      <Offer></Offer>
      <Purpose></Purpose>
    </div>
  );
}

export default App;
