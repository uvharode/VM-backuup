import { Component, OnInit, Input } from '@angular/core';
import {
  FormBuilder,
  FormGroup,
  Validators,
  FormControl,
  AbstractControl,
} from '@angular/forms';
import { Router } from '@angular/router';
import { UserService } from 'src/app/services/user.service';
// import { ConfirmPasswordValidatorDirective } from 'src/app/services/confirm-password-validator.directive';
import { MustMatch } from 'src/app/services/validation';

@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.scss'],
})
export class RegisterComponent implements OnInit {
  registerForm!: FormGroup;

  alert: boolean = false;
  constructor(
    private fb: FormBuilder,
    private userService: UserService,
    private router: Router
  ) // private pc: ConfirmPasswordValidatorDirective
  {}

  register() {
    this.userService.register(this.registerForm.value).subscribe((res) => {
      console.log(res);
      if (res) {
        this.router.navigate(['']);
      }
    });
    this.alert = true;
  }

  closeAlert() {
    this.alert = false;
  }
  get f() {
    return this.registerForm.controls;
  }

  ngOnInit(): void {
    this.registerForm = this.fb.group(
      {
        firstname: [
          '',
          [
            Validators.required,
            Validators.minLength(3),
            Validators.maxLength(12),
          ],
        ],
        lastname: [
          '',
          [
            Validators.required,
            Validators.minLength(3),
            Validators.maxLength(12),
          ],
        ],
        email: ['', [Validators.required, Validators.email]],
        dob: ['', Validators.required],
        password: ['', Validators.required],
        cpassword: ['', Validators.required],
      },
      {
        validator: MustMatch('password', 'cpassword'),
      }
    );
  }
}
