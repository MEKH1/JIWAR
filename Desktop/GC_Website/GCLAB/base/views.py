from django.shortcuts import render,redirect
from .models import Packages , Carousels, Media,Articles, HealthInsurance
from django.core.mail import BadHeaderError, send_mail, EmailMessage
from django.http import HttpResponse, HttpResponseRedirect
from .forms import Careerdetail
from django.conf import settings

  
# Create your views here.

def home(request):
    carousels = Carousels.objects.all()
    articles = Articles.objects.all()
    packages = Packages.objects.all()
    healthinsurance = HealthInsurance.objects.all()
    context = {'carousels':carousels ,'articles':articles, 'packages':packages,'healthinsurance':healthinsurance }
    return render(request, 'base/home.html',context)


def aboutus(request):
    medias = Media.objects.all()
    context = {'medias':medias}
    if request.method == "POST":
        fullname = request.POST['Full-name']
        email = request.POST['Email-Address']
        message= request.POST['message']
        attachment = request.FILES['attachted-cv']


        
        mail = EmailMessage(fullname + ' CV' , # subject 
           "Full Name: {}\nEmail: {}\n{} ".format(fullname,email,message)  , #Message 
            settings.EMAIL_HOST_USER,['mohd.alkhasawneh@hotmail.com']
            )

        mail.attach(attachment.name, attachment.read(), attachment.content_type)
        mail.send()

       

        return render(request, 'base/emailsent.html',{'fullname':fullname})
    else:
        return render(request, 'base/Aboutus.html',context)

    return render(request, 'base/Aboutus.html',context)

def services(request):
    packages = Packages.objects.all()
    context = {'packages':packages}
    return render(request, 'base/Services.html',context)


def articles(request,pk):
    articles = Articles.objects.get(id=pk)
    articlesside= Articles.objects.all()
    context = {'articles':articles , 'articlesside':articlesside,}
    return render(request,'base/Articles.html',context)





