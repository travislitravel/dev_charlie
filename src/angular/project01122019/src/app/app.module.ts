import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { HttpClientModule } from '@angular/common/http';
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';

// PAGES
import { HomeComponent } from './pages/home/home.component';
import { AboutComponent } from './pages/about/about.component';
import { WhyComponent } from './pages/why/why.component';
import { BlogComponent } from './pages/blog/blog.component';

// COMPONENTS
import { SidebarComponent } from './components/sidebar/sidebar.component';
import { NavbarComponent } from './components/navbar/navbar.component';
import { FooterComponent } from './components/footer/footer.component';
import { CarouselComponent } from './components/carousel/carousel.component';
import { BcardComponent } from './components/bcard/bcard.component';
import { PageheaderComponent } from './components/pageheader/pageheader.component';
import { VideomodalComponent } from './components/videomodal/videomodal.component';
import { AffliateComponent } from './components/affliate/affliate.component';
import { PagetitleComponent } from './components/pagetitle/pagetitle.component';
import { ContactformComponent } from './components/contactform/contactform.component';

// SERVICES
import { ContactService } from "./services/contact.service";

@NgModule({
  declarations: [
    AppComponent,
    HomeComponent,
    SidebarComponent,
    NavbarComponent,
    FooterComponent,
    CarouselComponent,
    BcardComponent,
    AboutComponent,
    WhyComponent,
    BlogComponent,
    PageheaderComponent,
    VideomodalComponent,
    AffliateComponent,
    PagetitleComponent,
    ContactformComponent
  ],
  imports: [
    BrowserModule,
    FormsModule,
    HttpClientModule,
    AppRoutingModule
  ],
  providers: [ContactService],
  bootstrap: [AppComponent]
})
export class AppModule { }
