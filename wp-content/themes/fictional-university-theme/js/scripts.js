import "../css/style.css";
import Search from "./modules/Search";
import Like from "./modules/Like";

// Our modules / classes
import MobileMenu from "./modules/MobileMenu";
import HeroSlider from "./modules/HeroSlider";
import MyNotes from "./modules/MyNotes";

// Instantiate a new object using our modules/classes
const mobileMenu = new MobileMenu();
const heroSlider = new HeroSlider();
const search = new Search();
const mynotes = new MyNotes();
const like = new Like();

// Allow new JS and CSS to load in browser without a traditional page refresh
if (module.hot) {
  module.hot.accept();
}
