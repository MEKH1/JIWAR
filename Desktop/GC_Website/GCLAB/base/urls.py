
from curses import napms
from django.urls import path

from . import views

urlpatterns = [
    path('', views.home,name='home'),
    path('Aboutus/', views.aboutus, name='Aboutus'),
    path('Services/', views.services, name='Services'),
    path('Articles/<str:pk>/', views.articles,name='Articles'),

]


