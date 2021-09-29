
// IMPORT AUTHENTICATION COMPONENT AREA
import Login from "../components/Auth/Login";
import Logout from "../components/Auth/Logout";

// Dashboard
import Dashboard from "../components/Dashboard";
import NotFound from "../components/NotFound";

export const routes = [
    // 404 Page
    { path: '*', name: 'NotFound', component: NotFound },
    { path: '/', name: 'Login', component: Login },
    { path: '/logout', name: 'Logout', component: Logout },
    { path: '/dashboard', name: 'Dashboard', component: Dashboard },
]
