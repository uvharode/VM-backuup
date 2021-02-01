import { Injectable } from '@angular/core';
import { CanActivate } from '@angular/router';
import { BehaviorSubject } from 'rxjs';
import { LocationStrategy } from '@angular/common';

@Injectable({
  providedIn: 'root'
})
export class AuthService {

  constructor(
    private locationStrategy: LocationStrategy
  ) { }
  id = new BehaviorSubject<String>(sessionStorage.getItem('id'))
  getId() {
    return sessionStorage.getItem('id');
  }
  isUserLoggedIn() {
    let un = sessionStorage.getItem('id');
    return !(un === null);
  }


  // Define a function to handle back button and use anywhere
  // preventBackButton() {
  //   history.pushState(null, null, location.href);
  //   this.locationStrategy.onPopState(() => {
  //     history.pushState(null, null, location.href);
  //   })
  // }
}
