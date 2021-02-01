import { Injectable } from '@angular/core';
import { CanActivate, ActivatedRouteSnapshot, RouterStateSnapshot, UrlTree, Router } from '@angular/router';
import { Observable } from 'rxjs';
import { AuthService } from './auth.service';

@Injectable({
  providedIn: 'root'
})
export class AuthGuard implements CanActivate {
  constructor(private router: Router, private as: AuthService) { }

  canActivate(
    route: ActivatedRouteSnapshot,
    state: RouterStateSnapshot): Observable<boolean | UrlTree> | Promise<boolean | UrlTree> | boolean | UrlTree {
    if (this.as.isUserLoggedIn()) {
      if (
        route.data.id &&
        route.data.id.indexof(this.as.getId()) === -1
      ) {
        //it check rolw from route with session role
        this.router.navigate(['/home']);
        return false;
      }
      return true;
    }
    this.router.navigate([' ']);
    return false;
  }

}
