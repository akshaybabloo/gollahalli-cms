# -*- coding: utf-8 -*-
# Generated by Django 1.11.1 on 2017-06-19 05:18
from __future__ import unicode_literals

from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    initial = True

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='ContentModel',
            fields=[
                ('ref_id', models.IntegerField(auto_created=True, default=1, primary_key=True, serialize=False)),
                ('created', models.DateTimeField(auto_now_add=True)),
                ('updated', models.DateTimeField(auto_now=True)),
                ('website_name', models.CharField(default='Enter your companies name', max_length=300)),
                ('cv', models.FileField(blank=True, null=True, upload_to='')),
                ('bio', models.CharField(default='Your Bio', max_length=10000)),
                ('url', models.URLField(default='https://www.example.com', max_length=400)),
                ('first_name', models.CharField(default='First Name', max_length=400)),
                ('last_name', models.CharField(default='Last Name', max_length=400)),
                ('email_id', models.EmailField(default='example@example.com', max_length=400)),
                ('github', models.URLField(default='https://www.example.com', max_length=400)),
                ('twitter', models.URLField(default='https://www.example.com', max_length=400)),
                ('linkedin', models.URLField(default='https://www.example.com', max_length=400)),
                ('file', models.FileField(blank=True, null=True, upload_to='')),
                ('image', models.ImageField(blank=True, null=True, upload_to='')),
            ],
        ),
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
                ('image', models.ImageField(blank=True, null=True, upload_to='')),
                ('ref_id', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, related_name='education', to='editor.ContentModel')),
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
                ('ref_id', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, related_name='experience', to='editor.ContentModel')),
            ],
        ),
        migrations.CreateModel(
            name='MetaContentModel',
            fields=[
                ('id', models.IntegerField(auto_created=True, default=1, primary_key=True, serialize=False)),
                ('header', models.TextField(default='Header content.', help_text='{{header}}')),
                ('footer', models.TextField(default='Footer Content', help_text='{{footer}}')),
                ('meta', models.TextField(default='Meta tags', help_text='{{meta_header}}')),
            ],
        ),
        migrations.CreateModel(
            name='ProjectsModel',
            fields=[
                ('id', models.IntegerField(auto_created=True, default=1, primary_key=True, serialize=False)),
                ('link', models.URLField(default='https://www.example.com', max_length=500)),
                ('title', models.CharField(default='title', max_length=500)),
                ('category', models.CharField(default='category', max_length=500)),
                ('long_description', models.CharField(default='long description', help_text='Markdown Enabled', max_length=10000)),
                ('short_description', models.CharField(default='short description', max_length=500)),
                ('file', models.FileField(blank=True, null=True, upload_to='')),
                ('image', models.ImageField(blank=True, null=True, upload_to='')),
                ('ref_id', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, related_name='projects', to='editor.ContentModel')),
            ],
        ),
        migrations.CreateModel(
            name='PublicationsContentModel',
            fields=[
                ('id', models.IntegerField(auto_created=True, default=1, primary_key=True, serialize=False)),
                ('content', models.CharField(default='content', help_text='Markdown Enabled', max_length=500)),
                ('file', models.FileField(blank=True, null=True, upload_to='')),
                ('image', models.ImageField(blank=True, null=True, upload_to='')),
            ],
        ),
        migrations.CreateModel(
            name='PublicationsModel',
            fields=[
                ('type_of_publication', models.CharField(default='type', max_length=500, primary_key=True, serialize=False)),
                ('ref_id', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, related_name='publications', to='editor.ContentModel')),
            ],
        ),
        migrations.CreateModel(
            name='SkillsContentModel',
            fields=[
                ('id', models.IntegerField(auto_created=True, default=1, primary_key=True, serialize=False)),
                ('content', models.CharField(default='content', help_text='Markdown Enabled', max_length=500)),
                ('file', models.FileField(blank=True, null=True, upload_to='')),
                ('image', models.ImageField(blank=True, null=True, upload_to='')),
            ],
        ),
        migrations.CreateModel(
            name='SkillsModel',
            fields=[
                ('type_of_skill', models.CharField(default='type', max_length=500, primary_key=True, serialize=False)),
                ('ref_id', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, related_name='skills', to='editor.ContentModel')),
            ],
        ),
        migrations.CreateModel(
            name='TutorialsModel',
            fields=[
                ('id', models.IntegerField(auto_created=True, default=1, primary_key=True, serialize=False)),
                ('link', models.URLField(default='https://www.example.com', max_length=500)),
                ('title', models.CharField(default='title', max_length=500)),
                ('long_description', models.CharField(default='long description', help_text='Markdown Enabled', max_length=10000)),
                ('file', models.FileField(blank=True, null=True, upload_to='')),
                ('image', models.ImageField(blank=True, null=True, upload_to='')),
                ('ref_id', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, related_name='tutorials', to='editor.ContentModel')),
            ],
        ),
        migrations.AddField(
            model_name='skillscontentmodel',
            name='type_of_skill',
            field=models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, related_name='skills_content', to='editor.SkillsModel'),
        ),
        migrations.AddField(
            model_name='publicationscontentmodel',
            name='type_of_publication',
            field=models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, related_name='publications_content', to='editor.PublicationsModel'),
        ),
    ]
