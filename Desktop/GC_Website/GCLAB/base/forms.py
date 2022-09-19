import email
from django import forms

class Careerdetail(forms.Form):
    fullname=forms.CharField(max_length=255)
    email=forms.EmailField()
    message= forms.Textarea()
    cv = forms.FileField()

