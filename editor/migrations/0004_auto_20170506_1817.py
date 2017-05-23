# -*- coding: utf-8 -*-
# Generated by Django 1.10.7 on 2017-05-06 06:17
from __future__ import unicode_literals

from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    dependencies = [
        ('editor', '0003_contentmodel_website_name'),
    ]

    operations = [
        migrations.CreateModel(
            name='EducationModel',
            fields=[
                ('id', models.IntegerField(auto_created=True, default=1, primary_key=True, serialize=False)),
                ('title', models.CharField(default='title', max_length=500)),
                ('from_date', models.DateField()),
                ('to_date', models.DateField()),
                ('where', models.CharField(default='where', max_length=500)),
                ('current', models.BooleanField(default=False)),
                ('file', models.FileField(blank=True, null=True, upload_to='')),
                ('image', models.FileField(blank=True, null=True, upload_to='')),
            ],
        ),
        migrations.CreateModel(
            name='ExperienceModel',
            fields=[
                ('id', models.IntegerField(auto_created=True, default=1, primary_key=True, serialize=False)),
                ('from_date', models.DateField()),
                ('to_date', models.DateField()),
                ('title', models.CharField(default='title', max_length=500)),
                ('where_city', models.CharField(default='where city', max_length=100)),
                ('where_country', models.CharField(default='where country', max_length=100)),
                ('company', models.CharField(default='company', max_length=500)),
                ('current', models.BooleanField(default=False)),
                ('file', models.FileField(blank=True, null=True, upload_to='')),
                ('image', models.FileField(blank=True, null=True, upload_to='')),
            ],
        ),
        migrations.CreateModel(
            name='ProjectsModel',
            fields=[
                ('id', models.IntegerField(auto_created=True, default=1, primary_key=True, serialize=False)),
                ('link', models.URLField(default='https://www.example.com', max_length=500)),
                ('title', models.CharField(default='title', max_length=500)),
                ('category', models.CharField(default='category', max_length=500)),
                ('file_name', models.CharField(default='file name', max_length=500)),
                ('long_description', models.CharField(default='long description', help_text='Markdown Enabled', max_length=10000)),
                ('short_description', models.CharField(default='short description', max_length=500)),
                ('file', models.FileField(blank=True, null=True, upload_to='')),
                ('image', models.FileField(blank=True, null=True, upload_to='')),
            ],
        ),
        migrations.CreateModel(
            name='PublicationsContentModel',
            fields=[
                ('id', models.IntegerField(auto_created=True, default=1, primary_key=True, serialize=False)),
                ('content', models.CharField(default='content', help_text='Markdown Enabled', max_length=500)),
                ('file', models.FileField(blank=True, null=True, upload_to='')),
                ('image', models.FileField(blank=True, null=True, upload_to='')),
            ],
        ),
        migrations.CreateModel(
            name='PublicationsModel',
            fields=[
                ('type_of_publication', models.CharField(default='type', max_length=500, primary_key=True, serialize=False)),
            ],
        ),
        migrations.CreateModel(
            name='SkillsContentModel',
            fields=[
                ('id', models.IntegerField(auto_created=True, default=1, primary_key=True, serialize=False)),
                ('content', models.CharField(default='content', help_text='Markdown Enabled', max_length=500)),
                ('file', models.FileField(blank=True, null=True, upload_to='')),
                ('image', models.FileField(blank=True, null=True, upload_to='')),
            ],
        ),
        migrations.CreateModel(
            name='SkillsModel',
            fields=[
                ('type_of_skill', models.CharField(default='type', max_length=500, primary_key=True, serialize=False)),
            ],
        ),
        migrations.CreateModel(
            name='TestModel',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('test_file_path', models.FilePathField(path='C:\\Users\\aksha\\Box Sync\\MyDrive\\Projects\\Akshay-GitHub\\gollahalli-me\\gollahalli_com\\static\\media')),
            ],
        ),
        migrations.CreateModel(
            name='TutorialsModel',
            fields=[
                ('id', models.IntegerField(auto_created=True, default=1, primary_key=True, serialize=False)),
                ('link', models.URLField(default='https://www.example.com', max_length=500)),
                ('title', models.CharField(default='title', max_length=500)),
                ('file_name', models.CharField(default='file name', max_length=500)),
                ('long_description', models.CharField(default='long description', help_text='Markdown Enabled', max_length=10000)),
                ('file', models.FileField(blank=True, null=True, upload_to='')),
                ('image', models.FileField(blank=True, null=True, upload_to='')),
            ],
        ),
        migrations.RemoveField(
            model_name='contentmodel',
            name='content',
        ),
        migrations.AddField(
            model_name='contentmodel',
            name='bio',
            field=models.CharField(default='Your Bio', max_length=10000),
        ),
        migrations.AddField(
            model_name='contentmodel',
            name='cv',
            field=models.URLField(default='https://www.example.com', max_length=400),
        ),
        migrations.AddField(
            model_name='contentmodel',
            name='email_id',
            field=models.EmailField(default='example@example.com', max_length=400),
        ),
        migrations.AddField(
            model_name='contentmodel',
            name='file',
            field=models.FileField(blank=True, null=True, upload_to=''),
        ),
        migrations.AddField(
            model_name='contentmodel',
            name='first_name',
            field=models.CharField(default='First Name', max_length=400),
        ),
        migrations.AddField(
            model_name='contentmodel',
            name='github',
            field=models.URLField(default='https://www.example.com', max_length=400),
        ),
        migrations.AddField(
            model_name='contentmodel',
            name='image',
            field=models.FileField(blank=True, null=True, upload_to=''),
        ),
        migrations.AddField(
            model_name='contentmodel',
            name='last_name',
            field=models.CharField(default='Last Name', max_length=400),
        ),
        migrations.AddField(
            model_name='contentmodel',
            name='linkedin',
            field=models.URLField(default='https://www.example.com', max_length=400),
        ),
        migrations.AddField(
            model_name='contentmodel',
            name='twitter',
            field=models.URLField(default='https://www.example.com', max_length=400),
        ),
        migrations.AddField(
            model_name='contentmodel',
            name='url',
            field=models.URLField(default='https://www.example.com', max_length=400),
        ),
        migrations.AlterField(
            model_name='contentmodel',
            name='ref_id',
            field=models.IntegerField(auto_created=True, default=1, primary_key=True, serialize=False),
        ),
        migrations.AddField(
            model_name='tutorialsmodel',
            name='ref_id',
            field=models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, related_name='tutorials', to='editor.ContentModel'),
        ),
        migrations.AddField(
            model_name='skillsmodel',
            name='ref_id',
            field=models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, related_name='skills', to='editor.ContentModel'),
        ),
        migrations.AddField(
            model_name='skillscontentmodel',
            name='type_of_skill',
            field=models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, related_name='skills_content', to='editor.SkillsModel'),
        ),
        migrations.AddField(
            model_name='publicationsmodel',
            name='ref_id',
            field=models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, related_name='publications', to='editor.ContentModel'),
        ),
        migrations.AddField(
            model_name='publicationscontentmodel',
            name='type_of_publication',
            field=models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, related_name='publications_content', to='editor.PublicationsModel'),
        ),
        migrations.AddField(
            model_name='projectsmodel',
            name='ref_id',
            field=models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, related_name='projects', to='editor.ContentModel'),
        ),
        migrations.AddField(
            model_name='experiencemodel',
            name='ref_id',
            field=models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, related_name='experience', to='editor.ContentModel'),
        ),
        migrations.AddField(
            model_name='educationmodel',
            name='ref_id',
            field=models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, related_name='education', to='editor.ContentModel'),
        ),
    ]