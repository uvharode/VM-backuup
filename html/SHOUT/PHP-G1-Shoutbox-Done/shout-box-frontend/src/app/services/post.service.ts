import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
@Injectable({
  providedIn: 'root',
})
export class PostService {
  constructor(private http: HttpClient) {}

  getData(): Observable<any> {
    let url = 'http://127.0.0.1:8000/api/list';
    return this.http.get(url);
  }
  getDataById(user_id: number): Observable<any> {
    console.log('---' + user_id);

    let url = 'http://127.0.0.1:8000/api/posts/' + user_id;
    return this.http.get(url);
  }

  insertMultimedia(myformData: any): Observable<any> {
    return this.http.post('http://127.0.0.1:8000/api/add', myformData);
  }

  getPostForTimeline(user_id: number): Observable<any> {
    console.log(user_id);

    return this.http.get('http://localhost:8000/api/friendsposts/' + user_id);
  }

  deletePost(post_id: any): Observable<any> {
    console.log("post delete service");
    
    return this.http.get('http://127.0.0.1:8000/api/delete/' + post_id);
  }
}
